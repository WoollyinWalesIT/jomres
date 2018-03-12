
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


/
/
 
T
h
e
 
p
u
r
p
o
s
e
 
o
f
 
t
h
i
s
 
f
u
n
c
t
i
o
n
 
i
s
 
t
o
 
a
l
l
o
w
 
u
s
 
t
o
 
o
v
e
r
r
i
d
e
 
t
h
e
 
d
o
b
o
o
k
i
n
g
 
l
i
n
k
 
p
r
o
g
r
a
m
a
t
i
c
a
l
l
y
.
 
I
n
 
t
h
i
s
 
c
a
s
e
 
i
t
 
w
i
l
l
 
s
i
m
p
l
y
 
r
e
t
u
r
n
 
t
h
e
 
d
o
b
o
o
k
i
n
g
 
l
i
n
k
,
 
b
u
t
 
m
a
k
i
n
g
 
i
t
 
a
 
s
i
m
p
l
e
 
f
u
n
c
t
i
o
n
 
a
l
l
o
w
s
 
u
s
 
t
o
 
o
v
e
r
r
i
d
e
 
i
t
 
i
f
 
n
e
e
d
e
d

/
/
 
T
y
p
e
s
:

/
/
 
s
e
f
:
 
s
e
f
 
u
r
l

/
/
 
n
o
s
e
f
:
 
n
o
 
s
e
f
 
u
r
l

/
/
 
s
e
f
s
a
f
e
:
 
s
e
f
 
u
r
l
 
n
o
t
 
p
a
s
s
e
d
 
t
h
r
o
u
g
h
 
j
o
m
r
e
s
U
R
L
 
f
u
n
c
t
i
o
n

/
/
 
a
j
a
x
:
 
a
j
a
x
 
s
a
f
e
 
u
r
l


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
b
o
o
k
i
n
g
_
u
r
l
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
,
 
$
t
y
p
e
 
=
 
'
s
e
f
'
,
 
$
p
a
r
a
m
s
 
=
 
'
'
)
 
{

	
$
j
o
m
r
e
s
_
a
c
c
e
s
s
_
c
o
n
t
r
o
l
 
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
a
c
c
e
s
s
_
c
o
n
t
r
o
l
'
)
;

	

	
i
f
 
(
!
$
j
o
m
r
e
s
_
a
c
c
e
s
s
_
c
o
n
t
r
o
l
-
>
t
h
i
s
_
u
s
e
r
_
c
a
n
(
'
d
o
b
o
o
k
i
n
g
'
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
m
r
C
o
n
f
i
g
 
=
 
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
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
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
m
r
C
o
n
f
i
g
[
 
'
e
x
t
e
r
n
a
l
B
o
o
k
i
n
g
F
o
r
m
U
r
l
'
 
]
)
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
e
x
t
e
r
n
a
l
B
o
o
k
i
n
g
F
o
r
m
U
r
l
'
 
]
 
!
=
 
'
'
)
 
{

	
	
$
u
r
l
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
m
r
C
o
n
f
i
g
[
 
'
e
x
t
e
r
n
a
l
B
o
o
k
i
n
g
F
o
r
m
U
r
l
'
 
]
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
U
R
L
)
;

	
}
 
e
l
s
e
 
{

	
	
s
w
i
t
c
h
(
$
t
y
p
e
)
 
{

	
	
	
c
a
s
e
 
'
s
e
f
'
:

	
	
	
	
$
u
r
l
 
=
 
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
.
'
&
t
a
s
k
=
d
o
b
o
o
k
i
n
g
&
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
=
'
.
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
.
$
p
a
r
a
m
s
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
 
'
n
o
s
e
f
'
:

	
	
	
	
$
u
r
l
 
=
 
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
_
N
O
S
E
F
.
'
&
t
a
s
k
=
d
o
b
o
o
k
i
n
g
&
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
=
'
.
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
.
$
p
a
r
a
m
s
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
 
'
s
e
f
s
a
f
e
'
:

	
	
	
	
$
u
r
l
 
=
 
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
.
'
&
t
a
s
k
=
d
o
b
o
o
k
i
n
g
&
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
=
'
.
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
.
$
p
a
r
a
m
s
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
 
'
a
j
a
x
'
:

	
	
	
	
$
u
r
l
 
=
 
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
J
A
X
.
'
&
t
a
s
k
=
d
o
b
o
o
k
i
n
g
&
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
=
'
.
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
.
$
p
a
r
a
m
s
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
u
r
l
 
=
 
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
.
'
&
t
a
s
k
=
d
o
b
o
o
k
i
n
g
&
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
=
'
.
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
.
$
p
a
r
a
m
s
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


 
 
 
 
r
e
t
u
r
n
 
$
u
r
l
;

}

