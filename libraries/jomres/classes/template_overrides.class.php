
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
 
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
s

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
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

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
s
 
=
 
a
r
r
a
y
(
)
;

	
	
$
t
h
i
s
-
>
g
e
t
_
a
l
l
_
o
v
e
r
r
i
d
e
s
(
)
;

 
 
 
 
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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
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
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
}


 
 
 
 
/
/
 
G
e
t
 
a
l
l
 
r
o
o
m
 
t
y
p
e
s
 
d
e
t
a
i
l
s

 
 
 
 
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
 
g
e
t
_
a
l
l
_
o
v
e
r
r
i
d
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
t
e
m
p
l
a
t
e
_
n
a
m
e
`
,
 
`
p
a
t
h
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
t
e
m
p
l
a
t
e
_
p
a
c
k
a
g
e
_
o
v
e
r
r
i
d
e
s
'
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

	
	
	
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
P
A
T
H
_
B
A
S
E
.
$
r
-
>
p
a
t
h
.
$
r
-
>
t
e
m
p
l
a
t
e
_
n
a
m
e
)
 
)
 
{

	
	
	
	
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
s
[
$
r
-
>
t
e
m
p
l
a
t
e
_
n
a
m
e
]
[
'
t
e
m
p
l
a
t
e
_
n
a
m
e
'
]
	
	
=
 
$
r
-
>
t
e
m
p
l
a
t
e
_
n
a
m
e
;

	
	
	
	
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
s
[
$
r
-
>
t
e
m
p
l
a
t
e
_
n
a
m
e
]
[
'
p
a
t
h
'
]
	
	
	
	
=
 
$
r
-
>
p
a
t
h
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
b
s
_
v
e
r
s
i
o
n
 
=
 
j
o
m
r
e
s
_
b
o
o
t
s
t
r
a
p
_
v
e
r
s
i
o
n
(
)
;

	
	
	
	
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
P
A
T
H
_
B
A
S
E
.
$
r
-
>
p
a
t
h
.
"
t
e
m
p
l
a
t
e
s
"
.
J
R
D
S
.
"
b
o
o
t
s
t
r
a
p
"
.
$
b
s
_
v
e
r
s
i
o
n
.
J
R
D
S
.
$
r
-
>
t
e
m
p
l
a
t
e
_
n
a
m
e
)
 
)
 
{

	
	
	
	
	
$
t
e
m
p
l
a
t
e
_
p
a
t
h
 
=
 
$
r
-
>
p
a
t
h
.
"
t
e
m
p
l
a
t
e
s
"
.
J
R
D
S
.
"
b
o
o
t
s
t
r
a
p
"
.
$
b
s
_
v
e
r
s
i
o
n
.
J
R
D
S
;

	
	
	
	
	
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
s
[
$
r
-
>
t
e
m
p
l
a
t
e
_
n
a
m
e
]
[
'
t
e
m
p
l
a
t
e
_
n
a
m
e
'
]
	
	
=
 
$
r
-
>
t
e
m
p
l
a
t
e
_
n
a
m
e
;

	
	
	
	
	
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
s
[
$
r
-
>
t
e
m
p
l
a
t
e
_
n
a
m
e
]
[
'
p
a
t
h
'
]
	
	
	
	
=
 
$
t
e
m
p
l
a
t
e
_
p
a
t
h
;

	
	
	
	

	
	
	
	
}

	
	
	
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
/
/
S
a
v
e
 
n
e
w
 
o
r
 
e
x
i
s
t
i
n
g
 
r
e
s
o
u
r
c
e
 
t
y
p
e

 
 
 
 
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
 
s
a
v
e
_
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
(
$
t
e
m
p
l
a
t
e
_
n
a
m
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
t
e
m
p
l
a
t
e
_
n
a
m
e
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
t
e
m
p
l
a
t
e
_
p
a
c
k
a
g
e
_
o
v
e
r
r
i
d
e
s
 
W
H
E
R
E
 
 
`
t
e
m
p
l
a
t
e
_
n
a
m
e
`
 
=
 
'
"
.
$
t
e
m
p
l
a
t
e
_
n
a
m
e
.
"
'
"
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	

	
	
i
f
 
(
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

	
	
	
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
_
t
e
m
p
l
a
t
e
_
p
a
c
k
a
g
e
_
o
v
e
r
r
i
d
e
s
 

	
	
	
	
(

	
	
	
	
`
t
e
m
p
l
a
t
e
_
n
a
m
e
`
,

	
	
	
	
`
p
a
t
h
`

	
	
	
	
)

	
	
	
	
V
A
L
U
E
S
 

	
	
	
	
(

	
	
	
	
'
"
.
$
t
e
m
p
l
a
t
e
_
n
a
m
e
.
"
'
,

	
	
	
	
'
"
.
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
s
[
$
t
e
m
p
l
a
t
e
_
n
a
m
e
]
[
'
p
a
t
h
'
]
.
"
'

	
	
	
	
)

	
	
	
	
"
;

	
	
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
t
e
m
p
l
a
t
e
_
p
a
c
k
a
g
e
_
o
v
e
r
r
i
d
e
s
 

	
	
	
	
	
	
S
E
T
 

	
	
	
	
	
	
	
`
t
e
m
p
l
a
t
e
_
n
a
m
e
`
 
	
	
=
 
'
"
.
$
t
e
m
p
l
a
t
e
_
n
a
m
e
.
"
'
,
 

	
	
	
	
	
	
	
`
p
a
t
h
`
 
	
	
	
	
	
=
 
'
"
.
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
s
[
$
t
e
m
p
l
a
t
e
_
n
a
m
e
]
[
'
p
a
t
h
'
]
.
"
'

	
	
	
	
	
	
W
H
E
R
E
 
`
t
e
m
p
l
a
t
e
_
n
a
m
e
`
 
=
'
"
 
.
$
t
e
m
p
l
a
t
e
_
n
a
m
e
.
"
'
"
;

	
	
}


 
 
 
 
 
 
 
 
i
f
 
(
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
f
a
l
s
e
)
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
F
a
i
l
e
d
 
t
o
 
u
p
d
a
t
e
 
t
e
m
p
l
a
t
e
 
o
v
e
r
r
i
d
e
s
.
'
)
;

	
	
}

 
 
 
 
}


 
 
 
 
/
/
D
e
l
e
t
e
 
r
e
s
o
u
r
c
e
 
t
y
p
e

 
 
 
 
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
 
d
e
l
e
t
e
_
o
v
e
r
r
i
d
e
(
$
t
e
m
p
l
a
t
e
_
n
a
m
e
)

 
 
 
 
{

	
	
$
s
u
c
c
e
s
s
 
=
 
t
r
u
e
;

	
	
$
q
u
e
r
y
 
=
 
"
D
E
L
E
T
E
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
t
e
m
p
l
a
t
e
_
p
a
c
k
a
g
e
_
o
v
e
r
r
i
d
e
s
 
W
H
E
R
E
 
`
t
e
m
p
l
a
t
e
_
n
a
m
e
`
 
=
 
'
"
.
$
t
e
m
p
l
a
t
e
_
n
a
m
e
.
"
'
"
;

 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
f
a
l
s
e
)
)
 
{

	
	
	
$
s
u
c
c
e
s
s
 
=
 
f
a
l
s
e
;

	
	
}

	
	
r
e
t
u
r
n
 
$
s
u
c
c
e
s
s
;

 
 
 
 
}

}

