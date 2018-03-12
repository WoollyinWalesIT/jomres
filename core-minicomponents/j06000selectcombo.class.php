
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
0
6
0
0
0
s
e
l
e
c
t
c
o
m
b
o

{

 
 
 
 
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

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
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
.
 
M
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
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
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
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
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
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
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
t
o
u
c
h
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
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
j
o
m
S
e
a
r
c
h
'
)
;

 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
i
f
(
 
!
f
u
n
c
t
i
o
n
_
e
x
i
s
t
s
(
'
j
s
o
n
_
e
n
c
o
d
e
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
(
J
O
M
R
E
S
_
L
I
B
R
A
R
I
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
j
s
o
n
'
.
J
R
D
S
.
'
J
S
O
N
.
p
h
p
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
f
u
n
c
t
i
o
n
 
j
s
o
n
_
e
n
c
o
d
e
(
$
d
a
t
a
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
s
o
n
 
=
 
n
e
w
 
S
e
r
v
i
c
e
s
_
J
S
O
N
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
(
 
$
j
s
o
n
-
>
e
n
c
o
d
e
(
$
d
a
t
a
)
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
$
a
l
l
P
r
o
p
e
r
t
y
L
o
c
a
t
i
o
n
s
 
=
 
p
r
e
p
G
e
o
g
r
a
p
h
i
c
S
e
a
r
c
h
(
)
;

 
 
 
 
 
 
 
 
$
f
i
l
t
e
r
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
_
n
a
m
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
q
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
_
v
a
l
u
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
A
l
l
 
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
f
i
l
t
e
r
 
=
=
 
'
c
o
u
n
t
r
y
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
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
r
e
g
i
o
n
s
[
 
]
 
=
 
$
s
e
a
r
c
h
A
l
l
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
a
l
l
P
r
o
p
e
r
t
y
L
o
c
a
t
i
o
n
s
 
a
s
 
$
l
o
c
a
t
i
o
n
s
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
l
o
c
a
t
i
o
n
s
 
a
s
 
$
l
o
c
a
t
i
o
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
 
=
 
$
l
o
c
a
t
i
o
n
[
 
'
r
e
g
i
o
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
l
o
c
a
t
i
o
n
[
 
'
c
o
u
n
t
r
y
'
 
]
 
=
=
 
$
q
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
i
o
n
s
[
 
$
t
 
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
e
l
s
e
 
i
f
 
(
$
q
=
=
$
s
e
a
r
c
h
A
l
l
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
$
r
e
g
i
o
n
s
[
$
t
]
=
$
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
g
i
o
n
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
_
a
r
r
a
y
 
=
 
a
r
r
a
y
_
u
n
i
q
u
e
(
$
r
e
g
i
o
n
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
t
e
r
 
=
=
 
'
r
e
g
i
o
n
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
w
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
t
o
w
n
s
[
 
]
 
=
 
$
s
e
a
r
c
h
A
l
l
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
a
l
l
P
r
o
p
e
r
t
y
L
o
c
a
t
i
o
n
s
 
a
s
 
$
l
o
c
a
t
i
o
n
s
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
l
o
c
a
t
i
o
n
s
 
a
s
 
$
l
o
c
a
t
i
o
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
 
=
 
$
l
o
c
a
t
i
o
n
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
t
o
w
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
l
o
c
a
t
i
o
n
[
 
'
r
e
g
i
o
n
'
 
]
 
=
=
 
$
q
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
w
n
s
[
 
$
t
 
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
e
l
s
e
 
i
f
 
(
$
q
=
=
$
s
e
a
r
c
h
A
l
l
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
$
t
o
w
n
s
[
$
t
]
=
$
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
t
o
w
n
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
_
a
r
r
a
y
 
=
 
a
r
r
a
y
_
u
n
i
q
u
e
(
$
t
o
w
n
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
r
e
t
_
j
s
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
t
_
a
r
r
a
y
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
_
j
s
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
$
k
e
y
 
=
>
 
$
v
a
l
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
r
e
t
_
s
t
r
i
n
g
 
=
 
j
s
o
n
_
e
n
c
o
d
e
(
$
r
e
t
_
j
s
o
n
)
;


 
 
 
 
 
 
 
 
e
c
h
o
 
$
r
e
t
_
s
t
r
i
n
g
;

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
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
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

