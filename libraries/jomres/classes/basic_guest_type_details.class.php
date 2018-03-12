
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
 
b
a
s
i
c
_
g
u
e
s
t
_
t
y
p
e
_
d
e
t
a
i
l
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
g
u
e
s
t
_
t
y
p
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
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
0
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
 
g
u
e
s
t
 
t
y
p
e
 
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
g
u
e
s
t
_
t
y
p
e
s
(
$
p
r
o
p
e
r
t
y
_
u
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
p
r
o
p
e
r
t
y
_
u
i
d
 
=
=
 
0
)
 
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
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
g
u
e
s
t
_
t
y
p
e
s
)
)
 
{
 
/
/
a
l
r
e
a
d
y
 
e
x
e
c
u
t
e
d
 
b
u
t
 
t
h
e
 
p
r
o
p
e
r
t
y
 
d
o
e
s
n
`
t
 
h
a
v
e
 
a
n
y
 
g
u
e
s
t
 
t
y
p
e
s
 
c
r
e
a
t
e
d
 
y
e
t
,
 
s
o
 
t
h
e
 
a
r
r
a
y
 
i
s
 
e
m
p
t
y

 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
u
e
s
t
_
t
y
p
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
$
p
r
o
p
e
r
t
y
_
u
i
d
;


 
 
 
 
 
 
 
 
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
i
d
`
,

	
	
	
	
	
`
t
y
p
e
`
,

	
	
	
	
	
`
n
o
t
e
s
`
,

	
	
	
	
	
`
m
a
x
i
m
u
m
`
,

	
	
	
	
	
`
i
s
_
p
e
r
c
e
n
t
a
g
e
`
,

	
	
	
	
	
`
p
o
s
n
e
g
`
,

	
	
	
	
	
`
v
a
r
i
a
n
c
e
`
,

	
	
	
	
	
`
p
u
b
l
i
s
h
e
d
`
,

	
	
	
	
	
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
u
i
d
`
,

	
	
	
	
	
`
o
r
d
e
r
`
,

	
	
	
	
	
`
i
s
_
c
h
i
l
d
`
 

	
	
	
	
F
R
O
M
 
`
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
u
s
t
o
m
e
r
t
y
p
e
s
`
 

	
	
	
	
W
H
E
R
E
 
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
u
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
.
'
 

	
	
	
	
O
R
D
E
R
 
B
Y
 
`
o
r
d
e
r
`
,
 
`
t
y
p
e
`
 
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

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
u
e
s
t
_
t
y
p
e
s
[
$
r
-
>
i
d
]
[
'
i
d
'
]
 
=
 
(
i
n
t
)
 
$
r
-
>
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
u
e
s
t
_
t
y
p
e
s
[
$
r
-
>
i
d
]
[
'
t
y
p
e
'
]
 
=
 
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
G
U
E
S
T
T
Y
P
E
'
.
$
r
-
>
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
t
y
p
e
)
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
u
e
s
t
_
t
y
p
e
s
[
$
r
-
>
i
d
]
[
'
n
o
t
e
s
'
]
 
=
 
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
G
U
E
S
T
N
O
T
E
S
'
.
$
r
-
>
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
n
o
t
e
s
)
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
u
e
s
t
_
t
y
p
e
s
[
$
r
-
>
i
d
]
[
'
m
a
x
i
m
u
m
'
]
 
=
 
(
i
n
t
)
 
$
r
-
>
m
a
x
i
m
u
m
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
u
e
s
t
_
t
y
p
e
s
[
$
r
-
>
i
d
]
[
'
i
s
_
p
e
r
c
e
n
t
a
g
e
'
]
 
=
 
(
i
n
t
)
 
$
r
-
>
i
s
_
p
e
r
c
e
n
t
a
g
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
u
e
s
t
_
t
y
p
e
s
[
$
r
-
>
i
d
]
[
'
p
o
s
n
e
g
'
]
 
=
 
(
i
n
t
)
 
$
r
-
>
p
o
s
n
e
g
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
u
e
s
t
_
t
y
p
e
s
[
$
r
-
>
i
d
]
[
'
v
a
r
i
a
n
c
e
'
]
 
=
 
(
f
l
o
a
t
)
 
$
r
-
>
v
a
r
i
a
n
c
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
u
e
s
t
_
t
y
p
e
s
[
$
r
-
>
i
d
]
[
'
p
u
b
l
i
s
h
e
d
'
]
 
=
 
(
i
n
t
)
 
$
r
-
>
p
u
b
l
i
s
h
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
u
e
s
t
_
t
y
p
e
s
[
$
r
-
>
i
d
]
[
'
p
r
o
p
e
r
t
y
_
u
i
d
'
]
 
=
 
(
i
n
t
)
 
$
r
-
>
p
r
o
p
e
r
t
y
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
u
e
s
t
_
t
y
p
e
s
[
$
r
-
>
i
d
]
[
'
o
r
d
e
r
'
]
 
=
 
(
i
n
t
)
 
$
r
-
>
o
r
d
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
u
e
s
t
_
t
y
p
e
s
[
$
r
-
>
i
d
]
[
'
i
s
_
c
h
i
l
d
'
]
 
=
 
(
i
n
t
)
 
$
r
-
>
i
s
_
c
h
i
l
d
;

 
 
 
 
 
 
 
 
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

}

