
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
c
o
u
n
t
r
i
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
c
o
u
n
t
r
i
e
s
 
=
 
f
a
l
s
e
;

	
	
$
t
h
i
s
-
>
u
s
e
d
_
c
o
u
n
t
r
i
e
s
 
=
 
f
a
l
s
e
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
u
s
e
d
_
p
r
o
p
e
r
t
y
_
c
o
u
n
t
r
i
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
g
e
t
 
c
o
u
n
t
r
i
e
s
 
u
s
e
d
 
b
y
 
p
r
o
p
e
r
t
i
e
s
 
i
n
 
t
h
e
 
s
y
s
t
e
m

 
 
 
 
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
u
s
e
d
_
p
r
o
p
e
r
t
y
_
c
o
u
n
t
r
i
e
s
(
)

 
 
 
 
{

	
	
i
f
 
(
i
s
_
a
r
r
a
y
(
$
t
h
i
s
-
>
u
s
e
d
_
c
o
u
n
t
r
i
e
s
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

	
	

	
	
$
t
h
i
s
-
>
u
s
e
d
_
c
o
u
n
t
r
i
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
i
d
`
,
`
c
o
u
n
t
r
y
c
o
d
e
`
,
`
c
o
u
n
t
r
y
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
c
o
u
n
t
r
i
e
s
 
W
H
E
R
E
 
`
c
o
u
n
t
r
y
c
o
d
e
`
 
I
N
 
(
S
E
L
E
C
T
 
D
I
S
T
I
N
C
T
 
`
p
r
o
p
e
r
t
y
_
c
o
u
n
t
r
y
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
p
r
o
p
e
r
t
y
s
)
 
O
R
D
E
R
 
B
Y
 
`
c
o
u
n
t
r
y
n
a
m
e
`
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
!
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
c
o
u
n
t
r
y
)
 
{

	
	
	
	
$
t
h
i
s
-
>
u
s
e
d
_
c
o
u
n
t
r
i
e
s
[
 
s
t
r
t
o
u
p
p
e
r
(
$
c
o
u
n
t
r
y
-
>
c
o
u
n
t
r
y
c
o
d
e
)
 
]
 
=
 
a
r
r
a
y
(
'
i
d
'
 
=
>
 
$
c
o
u
n
t
r
y
-
>
i
d
,
 
'
c
o
u
n
t
r
y
c
o
d
e
'
 
=
>
 
s
t
r
t
o
u
p
p
e
r
(
$
c
o
u
n
t
r
y
-
>
c
o
u
n
t
r
y
c
o
d
e
)
,
 
'
c
o
u
n
t
r
y
n
a
m
e
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
C
O
U
N
T
R
I
E
S
_
'
.
$
c
o
u
n
t
r
y
-
>
i
d
,
 
$
c
o
u
n
t
r
y
-
>
c
o
u
n
t
r
y
n
a
m
e
,
 
f
a
l
s
e
)
)
;

	
	
	
}

	
	
}

	
	

	
	
u
n
s
e
t
(
$
r
e
s
u
l
t
)
;


 
 
 
 
 
 
 
 
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
g
e
t
 
a
l
l
 
c
o
u
n
t
r
i
e
s
 
i
n
 
t
h
e
 
s
y
s
t
e
m

	
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
c
o
u
n
t
r
i
e
s
(
)

 
 
 
 
{

	
	
i
f
 
(
i
s
_
a
r
r
a
y
(
$
t
h
i
s
-
>
c
o
u
n
t
r
i
e
s
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
i
d
`
,
`
c
o
u
n
t
r
y
c
o
d
e
`
,
`
c
o
u
n
t
r
y
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
c
o
u
n
t
r
i
e
s
 
O
R
D
E
R
 
B
Y
 
`
c
o
u
n
t
r
y
n
a
m
e
`
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
!
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
c
o
u
n
t
r
y
)
 
{

	
	
	
	
$
t
h
i
s
-
>
c
o
u
n
t
r
i
e
s
[
 
s
t
r
t
o
u
p
p
e
r
(
$
c
o
u
n
t
r
y
-
>
c
o
u
n
t
r
y
c
o
d
e
)
 
]
 
=
 
a
r
r
a
y
(
'
i
d
'
 
=
>
 
$
c
o
u
n
t
r
y
-
>
i
d
,
 
'
c
o
u
n
t
r
y
c
o
d
e
'
 
=
>
 
s
t
r
t
o
u
p
p
e
r
(
$
c
o
u
n
t
r
y
-
>
c
o
u
n
t
r
y
c
o
d
e
)
,
 
'
c
o
u
n
t
r
y
n
a
m
e
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
C
O
U
N
T
R
I
E
S
_
'
.
$
c
o
u
n
t
r
y
-
>
i
d
,
 
$
c
o
u
n
t
r
y
-
>
c
o
u
n
t
r
y
n
a
m
e
,
 
f
a
l
s
e
)
)
;

	
	
	
}

	
	
}

	
	

	
	
u
n
s
e
t
(
$
r
e
s
u
l
t
)
;


 
 
 
 
 
 
 
 
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
g
e
t
 
c
o
u
n
t
r
y
 
b
y
 
i
d
,
 
u
s
e
d
 
o
n
 
e
d
i
t
 
c
o
u
n
t
r
y
 
a
d
m
i
n
 
p
a
g
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
 
g
e
t
_
c
o
u
n
t
r
y
_
b
y
_
i
d
(
$
i
d
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
i
d
 
=
=
 
0
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
i
d
`
,
`
c
o
u
n
t
r
y
c
o
d
e
`
,
`
c
o
u
n
t
r
y
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
c
o
u
n
t
r
i
e
s
 
W
H
E
R
E
 
`
i
d
`
 
=
 
"
 
.
 
(
i
n
t
)
$
i
d
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
,
2
)
;

	
	

	
	
i
f
 
(
!
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
 
$
r
e
s
u
l
t
;

	
	
}


 
 
 
 
 
 
 
 
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

}

