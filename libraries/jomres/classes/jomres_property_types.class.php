
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
p
r
o
p
e
r
t
y
_
t
y
p
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
p
r
o
p
e
r
t
y
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
t
y
p
e
 
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
p
r
o
p
e
r
t
y
_
t
y
p
e
[
'
i
d
'
]
 
=
 
0
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
	
	
/
/
 
n
e
w
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
i
d
 
d
e
f
a
u
l
t

 
 
 
 
 
 
 
 
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
t
y
p
e
[
'
p
t
y
p
e
'
]
 
=
 
'
'
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
	
/
/
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
n
a
m
e
;
 
T
O
D
O
:
 
m
a
k
e
 
i
t
 
u
s
e
 
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
t
y
p
e
[
'
p
t
y
p
e
_
d
e
s
c
'
]
 
=
 
'
'
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
s
p
e
c
i
f
i
c
 
l
a
n
g
u
a
g
e
 
f
i
l
e
 
d
i
r
 
n
a
m
e

 
 
 
 
 
 
 
 
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
t
y
p
e
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
 
1
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
p
u
b
l
i
s
h
e
d

 
 
 
 
 
 
 
 
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
t
y
p
e
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
 
0
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
	
/
/
 
o
r
d
e
r

 
 
 
 
 
 
 
 
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
t
y
p
e
[
'
m
r
p
_
s
r
p
_
f
l
a
g
'
]
 
=
 
0
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
w
h
a
t
 
w
i
l
l
 
g
u
e
s
t
s
 
b
o
o
k
:
 
r
o
o
m
s
 
i
n
 
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
 
o
r
 
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
 
i
t
s
e
l
f

 
 
 
 
 
 
 
 
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
t
y
p
e
[
'
m
a
r
k
e
r
'
]
 
=
 
'
'
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
G
o
o
g
l
e
 
m
a
p
 
m
a
r
k
e
r

	
	
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
t
y
p
e
[
'
h
a
s
_
s
t
a
r
s
'
]
 
=
 
1
;
 
 
 
 
 
 
 
 
	
	
	
/
/
 
S
h
o
w
 
s
t
a
r
s
 
i
n
p
u
t
 
o
r
 
n
o
t


 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
 
=
 
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
:
:
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
'
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
'
)
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
t
y
p
e
[
'
m
a
r
k
e
r
_
i
m
a
g
e
'
]
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
'
n
o
i
m
a
g
e
-
s
m
a
l
l
'
]
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
 
p
r
o
p
e
r
t
y
 
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

 
 
 
 
/
/
 
m
r
p
_
s
r
p
_
f
l
a
g
:

 
 
 
 
/
/
 
0
 
-
 
h
o
t
e
l

 
 
 
 
/
/
 
1
 
-
 
v
i
l
l
a
/
a
p
a
r
t
m
e
n
t

 
 
 
 
/
/
 
2
 
-
 
b
o
t
h
 
-
 
B
C
,
 
r
e
s
e
t
s
 
t
o
 
0

 
 
 
 
/
/
 
3
 
-
 
t
o
u
r
s

 
 
 
 
/
/
 
4
 
-
 
r
e
a
l
 
e
s
t
a
t
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
a
l
l
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
t
y
p
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
p
r
o
p
e
r
t
y
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
,
 
b
u
t
 
t
h
e
r
e
 
a
r
e
 
n
o
 
p
r
o
p
e
r
t
y
 
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
p
r
o
p
e
r
t
y
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
p
t
y
p
e
`
,
 
`
p
t
y
p
e
_
d
e
s
c
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
o
r
d
e
r
`
,
 
`
m
r
p
_
s
r
p
_
f
l
a
g
`
,
 
`
m
a
r
k
e
r
`
,
 
`
h
a
s
_
s
t
a
r
s
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
t
y
p
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
p
t
y
p
e
`
 
A
S
C
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
p
r
o
p
e
r
t
y
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
i
d

 
 
 
 
 
 
 
 
 
 
 
 
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
P
R
O
P
E
R
T
Y
T
Y
P
E
'
.
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
,
 
$
r
-
>
p
t
y
p
e
,
 
f
a
l
s
e
)
;
 
/
/
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
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
p
r
o
p
e
r
t
y
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
t
y
p
e
_
d
e
s
c
'
]
 
=
 
$
r
-
>
p
t
y
p
e
_
d
e
s
c
;
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
s
p
e
c
i
f
i
c
 
l
a
n
g
u
a
g
e
 
f
i
l
e
 
d
i
r
 
n
a
m
e

 
 
 
 
 
 
 
 
 
 
 
 
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
 
 
 
 
 
 
 
 
/
/
 
p
u
b
l
i
s
h
e
d

 
 
 
 
 
 
 
 
 
 
 
 
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
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
o
r
d
e
r

 
 
 
 
 
 
 
 
 
 
 
 
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
r
p
_
s
r
p
_
f
l
a
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
m
r
p
_
s
r
p
_
f
l
a
g
;
 
 
 
 
/
/
 
w
h
a
t
 
w
i
l
l
 
g
u
e
s
t
s
 
b
o
o
k
:
 
r
o
o
m
s
 
i
n
 
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
 
o
r
 
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
 
i
t
s
e
l
f

 
 
 
 
 
 
 
 
 
 
 
 
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
r
k
e
r
'
]
 
=
 
$
r
-
>
m
a
r
k
e
r
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
G
o
o
g
l
e
 
m
a
p
s
 
m
a
r
k
e
r

	
	
	
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
h
a
s
_
s
t
a
r
s
'
]
 
=
 
$
r
-
>
h
a
s
_
s
t
a
r
s
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
a
l
l
o
w
s
/
d
o
e
s
n
`
t
 
a
l
l
o
w
 
s
t
a
r
 
r
a
t
i
n
g
s

 
 
 
 
 
 
 
 
 
 
 

	
	
	
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
r
k
e
r
_
i
m
a
g
e
'
]
 
=
 
g
e
t
_
m
a
r
k
e
r
_
s
r
c
(
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
r
k
e
r
'
]
)
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


 
 
 
 
/
/
G
e
t
 
p
r
o
p
e
r
t
y
 
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
 
b
y
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
i
d

 
 
 
 
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
p
r
o
p
e
r
t
y
_
t
y
p
e
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
 
t
r
u
e
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
p
r
o
p
e
r
t
y
_
t
y
p
e
s
)
 
&
&
 
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
i
d
,
 
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
t
y
p
e
s
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
p
r
o
p
e
r
t
y
_
t
y
p
e
 
=
 
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
t
y
p
e
s
[
$
i
d
]
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
p
t
y
p
e
`
,
 
`
p
t
y
p
e
_
d
e
s
c
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
o
r
d
e
r
`
,
 
`
m
r
p
_
s
r
p
_
f
l
a
g
`
,
 
`
m
a
r
k
e
r
`
,
 
`
h
a
s
_
s
t
a
r
s
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
t
y
p
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
 
'
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
p
r
o
p
e
r
t
y
_
t
y
p
e
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
i
d

 
 
 
 
 
 
 
 
 
 
 
 
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
t
y
p
e
[
'
p
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
P
R
O
P
E
R
T
Y
T
Y
P
E
'
.
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
,
 
$
r
-
>
p
t
y
p
e
,
 
f
a
l
s
e
)
;
 
/
/
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
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
p
r
o
p
e
r
t
y
_
t
y
p
e
[
'
p
t
y
p
e
_
d
e
s
c
'
]
 
=
 
$
r
-
>
p
t
y
p
e
_
d
e
s
c
;
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
s
p
e
c
i
f
i
c
 
l
a
n
g
u
a
g
e
 
f
i
l
e
 
d
i
r
 
n
a
m
e

 
 
 
 
 
 
 
 
 
 
 
 
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
t
y
p
e
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
 
 
 
 
 
 
 
 
/
/
 
p
u
b
l
i
s
h
e
d

 
 
 
 
 
 
 
 
 
 
 
 
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
t
y
p
e
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
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
o
r
d
e
r

 
 
 
 
 
 
 
 
 
 
 
 
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
t
y
p
e
[
'
m
r
p
_
s
r
p
_
f
l
a
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
m
r
p
_
s
r
p
_
f
l
a
g
;
 
 
 
 
/
/
 
w
h
a
t
 
w
i
l
l
 
g
u
e
s
t
s
 
b
o
o
k
:
 
r
o
o
m
s
 
i
n
 
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
 
o
r
 
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
 
i
t
s
e
l
f

 
 
 
 
 
 
 
 
 
 
 
 
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
t
y
p
e
[
'
m
a
r
k
e
r
'
]
 
=
 
$
r
-
>
m
a
r
k
e
r
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
G
o
o
g
l
e
 
m
a
p
s
 
m
a
r
k
e
r

	
	
	
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
t
y
p
e
[
'
h
a
s
_
s
t
a
r
s
'
]
 
=
 
$
r
-
>
h
a
s
_
s
t
a
r
s
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
G
o
o
g
l
e
 
m
a
p
s
 
m
a
r
k
e
r


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
s
_
d
i
r
(
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
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
m
a
r
k
e
r
s
'
)
 
&
&

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
s
_
f
i
l
e
(
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
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
m
a
r
k
e
r
s
'
.
J
R
D
S
.
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
t
y
p
e
[
'
m
a
r
k
e
r
'
]
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
p
r
o
p
e
r
t
y
_
t
y
p
e
[
'
m
a
r
k
e
r
_
i
m
a
g
e
'
]
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
.
'
m
a
r
k
e
r
s
/
'
.
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
t
y
p
e
[
'
m
a
r
k
e
r
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
J
O
M
R
E
S
_
I
M
A
G
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
'
m
a
r
k
e
r
s
'
.
J
R
D
S
.
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
t
y
p
e
s
[
'
m
a
r
k
e
r
'
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
t
y
p
e
[
'
m
a
r
k
e
r
_
i
m
a
g
e
'
]
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
m
a
r
k
e
r
s
/
'
.
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
t
y
p
e
[
'
m
a
r
k
e
r
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
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
 
p
r
o
p
e
r
t
y
 
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
p
r
o
p
e
r
t
y
_
t
y
p
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
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
t
y
p
e
[
'
i
d
'
]
 
>
 
0
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
p
t
y
p
e
s
 

	
	
	
	
	
	
S
E
T
 

	
	
	
	
	
	
	
`
p
t
y
p
e
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
p
r
o
p
e
r
t
y
_
t
y
p
e
[
'
p
t
y
p
e
'
]
.
"
'
,

	
	
	
	
	
	
	
`
p
t
y
p
e
_
d
e
s
c
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
p
r
o
p
e
r
t
y
_
t
y
p
e
[
'
p
t
y
p
e
_
d
e
s
c
'
]
.
"
'
,
 

	
	
	
	
	
	
	
`
m
r
p
_
s
r
p
_
f
l
a
g
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
t
y
p
e
[
'
m
r
p
_
s
r
p
_
f
l
a
g
'
]
.
"
 
,

	
	
	
	
	
	
	
`
m
a
r
k
e
r
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
p
r
o
p
e
r
t
y
_
t
y
p
e
[
'
m
a
r
k
e
r
'
]
.
"
'
,

	
	
	
	
	
	
	
`
h
a
s
_
s
t
a
r
s
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
t
y
p
e
[
'
h
a
s
_
s
t
a
r
s
'
]
.
"

	
	
	
	
	
	
W
H
E
R
E
 
i
d
 
=
 
"
 
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
t
y
p
e
[
'
i
d
'
]
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
p
t
y
p
e
s
 

	
	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
	
`
p
t
y
p
e
`
,

	
	
	
	
	
	
	
	
`
p
t
y
p
e
_
d
e
s
c
`
 
,

	
	
	
	
	
	
	
	
`
m
r
p
_
s
r
p
_
f
l
a
g
`
,

	
	
	
	
	
	
	
	
`
m
a
r
k
e
r
`
,

	
	
	
	
	
	
	
	
`
h
a
s
_
s
t
a
r
s
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
t
y
p
e
[
'
p
t
y
p
e
'
]
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
p
r
o
p
e
r
t
y
_
t
y
p
e
[
'
p
t
y
p
e
_
d
e
s
c
'
]
.
"
'
,
 

	
	
	
	
	
	
	
	
"
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
t
y
p
e
[
'
m
r
p
_
s
r
p
_
f
l
a
g
'
]
.
"
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
p
r
o
p
e
r
t
y
_
t
y
p
e
[
'
m
a
r
k
e
r
'
]
.
"
'
,

	
	
	
	
	
	
	
	
"
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
t
y
p
e
[
'
h
a
s
_
s
t
a
r
s
'
]
.
"

	
	
	
	
	
	
	
	
)

	
	
	
	
	
	
	
	
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
 
P
r
o
p
e
r
t
y
 
t
y
p
e
 
i
n
s
e
r
t
 
o
r
 
u
p
d
a
t
e
 
f
a
i
l
e
d
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
 
p
r
o
p
e
r
t
y
 
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
p
r
o
p
e
r
t
y
_
t
y
p
e
(
$
i
d
s
 
=
 
a
r
r
a
y
(
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
 
t
r
u
e
;


 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
i
d
s
 
a
s
 
$
i
d
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
p
t
y
p
e
_
i
d
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
 
W
H
E
R
E
 
`
p
t
y
p
e
_
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
p
t
y
p
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

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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


 
 
 
 
/
/
P
u
b
l
i
s
h
 
o
r
 
u
n
p
u
b
l
i
s
h
 
p
r
o
p
e
r
t
y
 
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
 
p
u
b
l
i
s
h
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
t
y
p
e
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
 
t
y
p
e
 
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
p
r
o
p
e
r
t
y
_
t
y
p
e
(
$
i
d
)
;


 
 
 
 
 
 
 
 
i
f
 
(
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
t
y
p
e
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
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
u
b
l
i
s
h
 
=
 
1
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
u
b
l
i
s
h
 
=
 
0
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
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
t
y
p
e
[
'
i
d
'
]
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
u
b
l
i
s
h
 
=
=
 
0
 
&
&
 
$
t
h
i
s
-
>
p
t
y
p
e
_
i
s
_
u
s
e
d
(
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
t
y
p
e
[
'
i
d
'
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
 
'
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
p
t
y
p
e
s
 
S
E
T
 
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
 
=
 
'
.
$
p
u
b
l
i
s
h
.
'
 
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
 
'
.
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
t
y
p
e
[
'
i
d
'
]
;


 
 
 
 
 
 
 
 
 
 
 
 
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
 
P
u
b
l
i
s
h
i
n
g
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
f
a
i
l
e
d
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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

 
 
 
 
}


 
 
 
 
/
/
c
h
e
c
k
 
i
f
 
a
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
i
s
 
u
s
e
d
 
b
y
 
s
o
m
e
 
p
r
o
p
e
r
t
y
 
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
 
p
t
y
p
e
_
i
s
_
u
s
e
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
 
t
y
p
e
 
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
p
t
y
p
e
_
i
d
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
 
W
H
E
R
E
 
`
p
t
y
p
e
_
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


 
 
 
 
/
/
 
W
e
 
h
a
v
e
 
a
 
s
i
t
u
a
t
i
o
n
 
w
h
e
r
e
 
a
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
n
e
e
d
s
 
t
o
 
b
e
 
c
r
o
s
s
-
r
e
f
e
r
e
n
c
e
d
 
w
i
t
h
 
r
o
o
m
 
t
y
p
e
s
,
 
t
h
i
s
 
c
h
e
c
k
 
w
i
l
l
 
a
s
c
e
r
t
a
i
n
 
i
f
 
a
n
y
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
 
a
r
e
 
m
i
s
s
i
n
g
 
r
o
o
m
 
t
y
p
e
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
p
r
o
p
e
r
t
y
_
t
y
p
e
s
_
w
i
t
h
_
n
o
_
r
o
o
m
_
t
y
p
e
s
_
a
s
s
i
g
n
e
d
(
$
s
h
o
w
_
l
i
n
k
_
t
o
_
r
o
o
m
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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
t
y
p
e
s
_
r
e
q
u
i
r
i
n
g
_
a
t
t
e
n
t
i
o
n
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
/
/
g
e
t
 
a
l
l
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s

 
 
 
 
 
 
 
 
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
p
r
o
p
e
r
t
y
_
t
y
p
e
s
(
)
;


 
 
 
 
 
 
 
 
/
/
g
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

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
e
s
 
=
 
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
:
:
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
'
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
e
s
'
)
;

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
e
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
r
o
o
m
_
t
y
p
e
s
(
)
;


 
 
 
 
 
 
 
 
/
/
f
i
n
d
 
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
i
e
s
 
r
e
q
u
i
r
i
n
g
 
a
t
t
e
n
t
i
o
n

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
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
t
y
p
e
s
 
a
s
 
$
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
[
'
m
r
p
_
s
r
p
_
f
l
a
g
'
]
 
=
=
 
0
 
|
|
 
$
t
[
'
m
r
p
_
s
r
p
_
f
l
a
g
'
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
$
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
e
s
-
>
a
l
l
_
p
t
y
p
e
_
r
t
y
p
e
_
x
r
e
f
s
[
$
t
[
'
i
d
'
]
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
t
y
p
e
s
_
r
e
q
u
i
r
i
n
g
_
a
t
t
e
n
t
i
o
n
[
]
 
=
 
a
r
r
a
y
(
'
p
t
y
p
e
_
a
b
b
v
'
 
=
>
 
$
t
[
'
p
t
y
p
e
'
]
,
 
'
p
r
o
c
e
s
s
'
 
=
>
 
$
t
[
'
m
r
p
_
s
r
p
_
f
l
a
g
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
b
u
i
l
d
 
w
a
r
n
i
n
g

 
 
 
 
 
 
 
 
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
p
r
o
p
e
r
t
y
_
t
y
p
e
s
_
r
e
q
u
i
r
i
n
g
_
a
t
t
e
n
t
i
o
n
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
 
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
p
o
 
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
r
w
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
o
[
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
T
Y
P
E
S
_
W
I
T
H
O
U
T
_
R
O
O
M
_
T
Y
P
E
S
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
P
R
O
P
E
R
T
Y
_
T
Y
P
E
S
_
W
I
T
H
O
U
T
_
R
O
O
M
_
T
Y
P
E
S
'
,
 
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
T
Y
P
E
S
_
W
I
T
H
O
U
T
_
R
O
O
M
_
T
Y
P
E
S
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
[
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
B
O
T
H
_
C
O
L
H
E
A
D
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
B
O
T
H
_
C
O
L
H
E
A
D
'
,
 
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
B
O
T
H
_
C
O
L
H
E
A
D
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
[
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
T
Y
P
E
S
_
W
I
T
H
O
U
T
_
R
O
O
M
_
T
Y
P
E
S
_
L
I
S
T
_
R
O
O
M
_
T
Y
P
E
S
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
P
R
O
P
E
R
T
Y
_
T
Y
P
E
S
_
W
I
T
H
O
U
T
_
R
O
O
M
_
T
Y
P
E
S
_
L
I
S
T
_
R
O
O
M
_
T
Y
P
E
S
'
,
 
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
T
Y
P
E
S
_
W
I
T
H
O
U
T
_
R
O
O
M
_
T
Y
P
E
S
_
L
I
S
T
_
R
O
O
M
_
T
Y
P
E
S
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
[
'
H
P
T
Y
P
E
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
F
R
O
N
T
_
P
T
Y
P
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
P
T
Y
P
E
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
o
[
'
L
I
N
K
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
h
o
w
_
l
i
n
k
_
t
o
_
r
o
o
m
_
t
y
p
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
[
'
L
I
N
K
'
]
 
=
 
'
<
a
 
h
r
e
f
=
"
'
.
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
_
A
D
M
I
N
.
'
&
t
a
s
k
=
l
i
s
t
G
l
o
b
a
l
r
o
o
m
T
y
p
e
s
'
.
'
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
p
r
i
m
a
r
y
"
>
'
.
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
P
R
O
P
E
R
T
Y
_
T
Y
P
E
S
_
W
I
T
H
O
U
T
_
R
O
O
M
_
T
Y
P
E
S
_
L
I
N
K
_
T
E
X
T
'
,
 
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
T
Y
P
E
S
_
W
I
T
H
O
U
T
_
R
O
O
M
_
T
Y
P
E
S
_
L
I
N
K
_
T
E
X
T
'
,
 
f
a
l
s
e
)
.
'
<
/
a
>
'
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
p
r
o
p
e
r
t
y
_
t
y
p
e
s
_
r
e
q
u
i
r
i
n
g
_
a
t
t
e
n
t
i
o
n
 
a
s
 
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
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
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
r
[
'
P
R
O
P
E
R
T
Y
_
T
Y
P
E
'
]
 
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
t
y
p
e
[
'
p
t
y
p
e
_
a
b
b
v
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
t
y
p
e
[
'
p
r
o
c
e
s
s
'
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
M
A
N
A
G
E
M
E
N
T
_
P
R
O
C
E
S
S
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
H
O
T
E
L
'
,
 
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
H
O
T
E
L
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
M
A
N
A
G
E
M
E
N
T
_
P
R
O
C
E
S
S
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
V
I
L
L
A
'
,
 
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
V
I
L
L
A
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
w
s
[
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
[
]
 
=
 
$
o
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
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
L
A
T
E
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
o
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
r
o
w
s
'
,
 
$
r
w
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
l
i
s
t
_
p
t
y
p
e
s
_
w
i
t
h
o
u
t
_
r
o
o
m
_
t
y
p
e
s
.
h
t
m
l
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

	

	
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
p
r
o
p
e
r
t
y
_
t
y
p
e
_
i
m
a
g
e
s
(
)

	
{

	
	
$
i
m
a
g
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
 
=
 
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
:
:
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
'
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
'
)
;

	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
s
i
t
e
_
i
m
a
g
e
s
(
'
m
a
r
k
e
r
s
'
)
;

	
	

	
	
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
'
m
a
r
k
e
r
s
'
]
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
'
m
a
r
k
e
r
s
'
]
 
a
s
 
$
i
m
a
g
e
)
 
{

	
	
	
	
$
r
 
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
r
[
 
'
I
M
A
G
E
_
F
I
L
E
N
A
M
E
'
 
]
 
=
 
s
u
b
s
t
r
(
$
i
m
a
g
e
[
'
l
a
r
g
e
'
]
,
 
s
t
r
r
p
o
s
(
$
i
m
a
g
e
[
'
l
a
r
g
e
'
]
,
 
'
/
'
)
 
+
 
1
)
;

	
	
	
	
$
r
[
 
'
I
M
A
G
E
_
S
R
C
'
 
]
 
 
=
 
$
i
m
a
g
e
[
'
l
a
r
g
e
'
]
;

	
	
	
	

	
	
	
	
$
i
m
a
g
e
s
[
]
 
=
 
$
r
;

	
	
	
}

	
	
}


	
	
r
e
t
u
r
n
 
$
i
m
a
g
e
s
;

	
}

	

	
/
/
g
e
t
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
d
r
o
p
d
o
w
n

	
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
P
r
o
p
e
r
t
y
T
y
p
e
D
r
o
p
d
o
w
n
(
$
s
e
l
e
c
t
e
d
 
=
 
'
'
,
 
$
e
x
t
e
n
d
e
d
 
=
 
f
a
l
s
e
,
 
$
i
s
_
d
i
s
a
b
l
e
d
 
=
 
f
a
l
s
e
,
 
$
i
n
p
u
t
_
n
a
m
e
 
=
 
'
p
r
o
p
e
r
t
y
T
y
p
e
'
)

	
{

	
	
i
f
 
(
!
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
t
y
p
e
s
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
e
t
_
a
l
l
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
t
y
p
e
s
(
)
;

	
	
}


	
	
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
t
y
p
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
 
'
'
;

	
	
}

	
	

	
	
i
f
 
(
$
i
n
p
u
t
_
n
a
m
e
 
=
=
 
'
'
)
 
{

	
	
	
$
i
n
p
u
t
_
n
a
m
e
 
=
 
'
p
r
o
p
e
r
t
y
T
y
p
e
'
;

	
	
}

	
	

	
	
$
o
p
t
i
o
n
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

	
	
f
o
r
e
a
c
h
 
(
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
t
y
p
e
s
 
a
s
 
$
p
)
 
{

	
	
	
i
f
 
(
$
p
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
=
 
1
)
 
{

	
	
	
	
$
p
t
y
p
e
 
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
P
R
O
P
E
R
T
Y
T
Y
P
E
'
.
(
i
n
t
)
 
$
p
[
'
i
d
'
]
,
 
$
p
[
'
p
t
y
p
e
'
]
,
 
f
a
l
s
e
)
;


	
	
	
	
i
f
 
(
$
e
x
t
e
n
d
e
d
)
 
{

	
	
	
	
	
s
w
i
t
c
h
 
(
$
p
[
'
m
r
p
_
s
r
p
_
f
l
a
g
'
]
)
 
{

	
	
	
	
	
	
c
a
s
e
 
1
:

	
	
	
	
	
	
	
$
p
t
y
p
e
 
.
=
 
'
 
-
 
'
.
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
V
I
L
L
A
'
,
 
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
V
I
L
L
A
'
,
 
f
a
l
s
e
)
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
2
:

	
	
	
	
	
	
	
$
p
t
y
p
e
 
.
=
 
'
 
-
 
'
.
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
B
O
T
H
'
,
 
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
B
O
T
H
'
,
 
f
a
l
s
e
)
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
3
:

	
	
	
	
	
	
	
$
p
t
y
p
e
 
.
=
 
'
 
-
 
'
.
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
T
O
U
R
S
'
,
 
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
T
O
U
R
S
'
,
 
f
a
l
s
e
)
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
c
a
s
e
 
4
:

	
	
	
	
	
	
	
$
p
t
y
p
e
 
.
=
 
'
 
-
 
'
.
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
R
E
A
L
E
S
T
A
T
E
'
,
 
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
R
E
A
L
E
S
T
A
T
E
'
,
 
f
a
l
s
e
)
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
	
d
e
f
a
u
l
t
:

	
	
	
	
	
	
	
$
p
t
y
p
e
 
.
=
 
'
 
-
 
'
.
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
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
H
O
T
E
L
'
,
 
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
H
O
T
E
L
'
,
 
f
a
l
s
e
)
;

	
	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
}

	
	
	
	
}


	
	
	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
p
[
'
i
d
'
]
,
 
$
p
t
y
p
e
)
;

	
	
	
}

	
	
}

	
	

	
	
i
f
 
(
$
i
s
_
d
i
s
a
b
l
e
d
)
 
{

	
	
	
$
d
i
s
a
b
l
e
d
 
=
 
'
 
d
i
s
a
b
l
e
d
'
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
d
i
s
a
b
l
e
d
 
=
 
'
'
;

	
	
}


	
	
$
d
r
o
p
d
o
w
n
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
o
p
t
i
o
n
s
,
 
$
i
n
p
u
t
_
n
a
m
e
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
.
$
d
i
s
a
b
l
e
d
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
l
e
c
t
e
d
)
;


	
	
r
e
t
u
r
n
 
$
d
r
o
p
d
o
w
n
;

	
}

	

	
/
/
g
e
t
 
p
r
o
p
e
r
t
y
 
d
e
s
c
r
i
p
t
i
o
n
s
 
d
r
o
p
d
o
w
n
 
-
 
u
s
e
d
 
f
o
r
 
l
a
n
g
u
a
g
e
 
c
o
n
t
e
x
t
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
P
r
o
p
e
r
t
y
T
y
p
e
D
e
s
c
D
r
o
p
d
o
w
n
(
$
s
e
l
e
c
t
e
d
 
=
 
'
0
'
,
 
$
i
n
p
u
t
_
n
a
m
e
 
=
 
'
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
,
 
$
j
a
v
a
s
c
r
i
p
t
 
=
 
'
'
)

	
{

	
	
i
f
 
(
!
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
t
y
p
e
s
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
e
t
_
a
l
l
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
t
y
p
e
s
(
)
;

	
	
}


	
	
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
t
y
p
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
 
'
'
;

	
	
}

	
	

	
	
i
f
 
(
$
i
n
p
u
t
_
n
a
m
e
 
=
=
 
'
'
)
 
{

	
	
	
$
i
n
p
u
t
_
n
a
m
e
 
=
 
'
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
;

	
	
}

	
	

	
	
$
o
p
t
i
o
n
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
d
e
s
c
r
i
p
t
i
o
n
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
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
'
,
 
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
S
E
A
R
C
H
_
A
L
L
'
,
 
'
_
J
O
M
R
E
S
_
S
E
A
R
C
H
_
A
L
L
'
,
 
f
a
l
s
e
)
)
;

	
	

	
	
f
o
r
e
a
c
h
 
(
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
t
y
p
e
s
 
a
s
 
$
p
)
 
{

	
	
	
i
f
 
(
$
p
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
=
 
1
 
&
&
 
!
i
n
_
a
r
r
a
y
(
$
p
[
'
p
t
y
p
e
_
d
e
s
c
'
]
,
 
$
d
e
s
c
r
i
p
t
i
o
n
s
)
)
 
{

	
	
	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
p
[
'
p
t
y
p
e
_
d
e
s
c
'
]
,
 
$
p
[
'
p
t
y
p
e
_
d
e
s
c
'
]
)
;

	
	
	
	
$
d
e
s
c
r
i
p
t
i
o
n
s
[
]
 
=
 
$
p
[
'
p
t
y
p
e
_
d
e
s
c
'
]
;

	
	
	
}

	
	
}


	
	
$
d
r
o
p
d
o
w
n
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
o
p
t
i
o
n
s
,
 
$
i
n
p
u
t
_
n
a
m
e
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
 
'
.
$
j
a
v
a
s
c
r
i
p
t
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
l
e
c
t
e
d
)
;


	
	
r
e
t
u
r
n
 
$
d
r
o
p
d
o
w
n
;

	
}

}

