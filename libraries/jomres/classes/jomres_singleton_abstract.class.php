
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t

{

 
 
 
 
p
r
o
t
e
c
t
e
d
 
s
t
a
t
i
c
 
$
_
i
n
s
t
a
n
c
e
s
;


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{


 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
I
n
s
t
a
n
c
e
(
$
c
l
a
s
s
,
 
$
a
r
g
1
 
=
 
n
u
l
l
)

 
 
 
 
{

	
	
/
/
i
n
s
t
a
n
c
e
 
a
l
r
e
a
d
y
 
a
v
a
i
l
a
b
l
e

	
	
i
f
 
(
i
s
s
e
t
(
s
e
l
f
:
:
$
_
i
n
s
t
a
n
c
e
s
[
 
$
c
l
a
s
s
 
]
)
)
 
{

	
	
	
r
e
t
u
r
n
 
s
e
l
f
:
:
$
_
i
n
s
t
a
n
c
e
s
[
 
$
c
l
a
s
s
 
]
;

	
	
}

 
 
 
 
 
 
 
 

	
	
/
/
c
l
a
s
s
e
s
 
r
e
g
i
s
t
r
y

	
	
g
l
o
b
a
l
 
$
c
l
a
s
s
e
s
;

	
	

	
	
/
/
c
h
e
c
k
 
c
o
r
e
 
a
n
d
 
r
e
m
o
t
e
 
p
l
u
g
i
n
s
 
d
i
r
s

	
	
i
f
 
(
i
s
s
e
t
(
$
c
l
a
s
s
e
s
[
$
c
l
a
s
s
]
)
)
 
{

	
	
	

	
	
	
/
/
s
p
e
c
i
f
i
c
 
c
h
e
c
k
 
f
o
r
 
m
i
n
i
c
o
m
p
o
n
e
n
t
_
r
e
g
i
s
t
r
y
 
c
l
a
s
s
,
 
t
o
 
m
a
k
e
 
s
u
r
e
 
i
t
`
s
 
t
h
e
r
e

	
	
	
/
/
i
f
 
i
t
`
s
 
n
o
t
 
w
h
e
r
e
 
e
x
p
e
c
t
e
d
,
 
r
e
d
i
r
e
c
t
 
t
o
 
j
o
m
r
e
s
 
d
e
f
a
u
l
t
 
f
r
o
n
t
p
a
g
e
 
s
o
 
t
h
e
 
c
l
a
s
s
e
s
 
a
n
d
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
 
r
e
g
i
s
t
r
i
e
s
 
w
i
l
l
 
b
e
 
r
e
b
u
i
l
t

	
	
	
i
f
 
(
 
$
c
l
a
s
s
 
=
=
 
'
m
i
n
i
c
o
m
p
o
n
e
n
t
_
r
e
g
i
s
t
r
y
'
 
)
 
{

	
	
	
	
i
f
 
(
 
!
f
i
l
e
_
e
x
i
s
t
s
(
 
$
c
l
a
s
s
e
s
[
$
c
l
a
s
s
]
 
.
 
$
c
l
a
s
s
 
.
 
'
.
c
l
a
s
s
.
p
h
p
'
 
)
 
)
 
{

	
	
	
	
	
/
/
d
e
l
e
t
e
 
t
h
e
 
c
l
a
s
s
e
s
 
r
e
g
s
i
t
r
y

	
	
	
	
	
i
f
 
(
 
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
_
T
E
M
P
_
A
B
S
P
A
T
H
 
.
 
'
r
e
g
i
s
t
r
y
_
c
l
a
s
s
e
s
.
p
h
p
'
)
 
)
 
{

	
	
	
	
	
	
u
n
l
i
n
k
(
 
J
O
M
R
E
S
_
T
E
M
P
_
A
B
S
P
A
T
H
 
.
 
'
r
e
g
i
s
t
r
y
_
c
l
a
s
s
e
s
.
p
h
p
'
 
)
;

	
	
	
	
	
}

	
	
	
	
	

	
	
	
	
	
/
/
d
e
l
e
t
e
 
t
h
e
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
 
r
e
g
i
s
t
r
y

	
	
	
	
	
i
f
 
(
 
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
_
T
E
M
P
_
A
B
S
P
A
T
H
 
.
 
'
r
e
g
i
s
t
r
y
.
p
h
p
'
)
 
)
 
{

	
	
	
	
	
	
u
n
l
i
n
k
(
 
J
O
M
R
E
S
_
T
E
M
P
_
A
B
S
P
A
T
H
 
.
 
'
r
e
g
i
s
t
r
y
.
p
h
p
'
 
)
;


	
	
	
	
	
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
 
j
o
m
r
e
s
U
R
L
(
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
 
)
,
 
'
'
 
)
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}


	
	
	
r
e
q
u
i
r
e
_
o
n
c
e
 
$
c
l
a
s
s
e
s
[
$
c
l
a
s
s
]
.
$
c
l
a
s
s
.
'
.
c
l
a
s
s
.
p
h
p
'
;

	
	
	

	
	
	
s
e
l
f
:
:
$
_
i
n
s
t
a
n
c
e
s
[
 
$
c
l
a
s
s
 
]
 
=
 
n
e
w
 
$
c
l
a
s
s
(
$
a
r
g
1
)
;

	
	

	
	
	
r
e
t
u
r
n
 
s
e
l
f
:
:
$
_
i
n
s
t
a
n
c
e
s
[
 
$
c
l
a
s
s
 
]
;

	
	
}

	
	

	
	
/
/
l
a
s
t
 
p
l
a
c
e
 
t
o
 
c
h
e
c
k
 
i
s
 
j
o
m
r
e
s
 
c
o
r
e
 
c
l
a
s
s
e
s
 
d
i
r

	
	
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
_
C
L
A
S
S
E
S
_
A
B
S
P
A
T
H
.
$
c
l
a
s
s
.
'
.
c
l
a
s
s
.
p
h
p
'
)
)
 
{

	
	
	
r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
C
L
A
S
S
E
S
_
A
B
S
P
A
T
H
.
$
c
l
a
s
s
.
'
.
c
l
a
s
s
.
p
h
p
'
;

	
	
	

	
	
	
s
e
l
f
:
:
$
_
i
n
s
t
a
n
c
e
s
[
 
$
c
l
a
s
s
 
]
 
=
 
n
e
w
 
$
c
l
a
s
s
(
$
a
r
g
1
)
;

	
	
	

	
	
	
r
e
t
u
r
n
 
s
e
l
f
:
:
$
_
i
n
s
t
a
n
c
e
s
[
 
$
c
l
a
s
s
 
]
;

	
	
}

	
	

	
	
/
/
c
l
a
s
s
 
d
o
e
s
n
`
t
 
e
x
i
s
t
 
s
o
 
w
e
`
l
l
 
e
c
h
o
 
a
 
m
e
s
s
a
g
e

	
	
e
c
h
o
 
'
<
p
 
c
l
a
s
s
=
"
a
l
e
r
t
 
a
l
e
r
t
-
d
a
n
g
e
r
 
a
l
e
r
t
-
e
r
r
o
r
"
>
E
r
r
o
r
,
 
c
l
a
s
s
 
'
.
$
c
l
a
s
s
.
'
 
d
o
e
s
n
`
t
 
e
x
i
s
t
.
<
/
p
>
'
;


 
 
 
 
 
 
 
 
$
b
a
c
k
t
r
a
c
e
 
=
 
d
e
b
u
g
_
b
a
c
k
t
r
a
c
e
(
)
;

	
	
$
t
r
a
c
e
 
=
 
"
<
b
r
/
>
 
F
i
l
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
0
]
[
'
f
i
l
e
'
]
.
"
 
L
i
n
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
0
]
[
'
l
i
n
e
'
]
.
 
"
 
F
u
n
c
t
i
o
n
 
"
.
$
b
a
c
k
t
r
a
c
e
[
0
]
[
'
f
u
n
c
t
i
o
n
'
]
.
"
<
b
r
/
>
 
"
;

 
 
 
 
 
 
 
 
$
t
r
a
c
e
 
.
=
 
"
F
i
l
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
1
]
[
'
f
i
l
e
'
]
.
"
 
L
i
n
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
1
]
[
'
l
i
n
e
'
]
.
 
"
 
F
u
n
c
t
i
o
n
 
"
.
$
b
a
c
k
t
r
a
c
e
[
1
]
[
'
f
u
n
c
t
i
o
n
'
]
.
"
<
b
r
/
>
 
"
;

 
 
 
 
 
 
 
 
$
t
r
a
c
e
 
.
=
 
"
 
F
i
l
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
2
]
[
'
f
i
l
e
'
]
.
"
 
L
i
n
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
2
]
[
'
l
i
n
e
'
]
.
 
"
 
F
u
n
c
t
i
o
n
 
"
.
$
b
a
c
k
t
r
a
c
e
[
2
]
[
'
f
u
n
c
t
i
o
n
'
]
.
"
<
b
r
/
>
 
"
;

 
 
 
 
 
 
 
 
$
t
r
a
c
e
 
.
=
 
"
 
F
i
l
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
3
]
[
'
f
i
l
e
'
]
.
"
 
L
i
n
e
 
"
.
$
b
a
c
k
t
r
a
c
e
[
3
]
[
'
l
i
n
e
'
]
.
 
"
 
F
u
n
c
t
i
o
n
 
"
.
$
b
a
c
k
t
r
a
c
e
[
3
]
[
'
f
u
n
c
t
i
o
n
'
]
.
"
<
b
r
/
>
 
"
;
 

 
 
 
 
 
 
 
 

	
	
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
$
t
r
a
c
e
 
,
 
"
C
o
r
e
"
 
,
 
"
C
R
I
T
I
C
A
L
"
 
)
;

	
	

	
	
i
f
 
(
!
i
s
s
e
t
(
s
e
l
f
:
:
$
_
i
n
s
t
a
n
c
e
s
[
 
$
c
l
a
s
s
 
]
)
)
 
{

	
	
	
s
e
l
f
:
:
$
_
i
n
s
t
a
n
c
e
s
[
 
$
c
l
a
s
s
 
]
 
=
 
n
e
w
 
j
o
m
r
e
s
_
e
m
p
t
y
_
c
l
a
s
s
(
)
;

	
	
}

	
	

	
	
r
e
t
u
r
n
 
s
e
l
f
:
:
$
_
i
n
s
t
a
n
c
e
s
[
 
$
c
l
a
s
s
 
]
;

 
 
 
 
}

}

