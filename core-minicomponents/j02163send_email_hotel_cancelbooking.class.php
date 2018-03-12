
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
2
1
6
3
s
e
n
d
_
e
m
a
i
l
_
h
o
t
e
l
_
c
a
n
c
e
l
b
o
o
k
i
n
g

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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
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


 
 
 
 
 
 
 
 
$
e
m
a
i
l
_
t
y
p
e
 
=
 
'
e
m
a
i
l
_
h
o
t
e
l
_
c
a
n
c
e
l
b
o
o
k
i
n
g
'
;

	
	

	
	
$
s
i
t
e
C
o
n
f
i
g
 
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
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

	
	
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;


 
 
 
 
 
 
 
 
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
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
r
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
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
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;


 
 
 
 
 
 
 
 
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
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
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
;

 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
c
o
n
t
r
a
c
t
_
u
i
d
'
 
]
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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
e
m
a
i
l
_
w
h
e
n
_
d
o
n
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
m
a
i
l
_
w
h
e
n
_
d
o
n
e
 
=
 
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
e
m
a
i
l
_
w
h
e
n
_
d
o
n
e
 
=
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
e
m
a
i
l
_
w
h
e
n
_
d
o
n
e
'
 
]
;

 
 
 
 
 
 
 
 
}
 
/
/
 
O
p
t
i
o
n
a
l
.
 
W
e
'
l
l
 
s
e
t
 
e
m
a
i
l
_
w
h
e
n
_
d
o
n
e
 
b
y
 
d
e
f
a
u
l
t
 
t
o
 
t
r
u
e
,
 
o
t
h
e
r
w
i
s
e
 
w
e
'
l
l
 
s
e
t
 
i
t
 
i
n
 
t
h
e
 
c
o
m
p
o
n
e
n
t
A
r
g
s
 
v
a
r
i
a
b
l
e
.
 
T
h
i
s
 
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
 
c
a
l
l
 
t
h
i
s
 
s
c
r
i
p
t
 
i
n
d
e
p
e
n
d
a
n
t
l
y
 
w
h
i
c
h
 
i
n
 
t
u
r
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
 
v
i
e
w
 
t
h
e
 
e
m
a
i
l
 
a
s
 
i
t
'
s
 
c
o
n
t
r
u
c
t
e
d
,
 
r
a
t
h
e
r
 
t
h
a
n
 
w
h
e
n
 
s
e
n
t
.


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
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
g
e
n
e
r
i
c
_
b
o
o
k
i
n
g
_
e
m
a
i
l
'
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
c
o
n
t
r
a
c
t
_
u
i
d
,
 
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

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
s
-
>
p
a
r
s
e
_
e
m
a
i
l
(
$
e
m
a
i
l
_
t
y
p
e
,
 
$
c
o
n
t
r
a
c
t
_
u
i
d
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
e
m
a
i
l
_
w
h
e
n
_
d
o
n
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
j
o
m
r
e
s
M
a
i
l
e
r
(
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
E
M
A
I
L
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
F
I
R
S
T
N
A
M
E
'
]
.
'
 
'
.
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
S
U
R
N
A
M
E
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
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
E
M
A
I
L
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
s
-
>
p
a
r
s
e
d
_
e
m
a
i
l
[
'
s
u
b
j
e
c
t
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
s
-
>
p
a
r
s
e
d
_
e
m
a
i
l
[
'
t
e
x
t
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
 
=
 
1
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
F
a
i
l
u
r
e
 
i
n
 
s
e
n
d
i
n
g
 
n
e
w
 
b
o
o
k
i
n
g
 
e
m
a
i
l
 
t
o
 
h
o
t
e
l
.
 
T
a
r
g
e
t
 
a
d
d
r
e
s
s
:
 
'
.
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
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
E
M
A
I
L
'
]
.
'
 
S
u
b
j
e
c
t
'
.
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
s
-
>
p
a
r
s
e
d
_
e
m
a
i
l
[
'
s
u
b
j
e
c
t
'
]
.
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
s
-
>
p
a
r
s
e
d
_
e
m
a
i
l
[
'
t
e
x
t
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	

	
	
	
/
/
s
e
n
d
 
a
 
c
o
p
y
 
o
f
 
t
h
i
s
 
e
m
a
i
l
 
t
o
 
s
i
t
e
 
a
d
m
i
n
s

	
	
	
i
f
 
(
$
j
r
C
o
n
f
i
g
[
'
s
e
n
d
_
e
m
a
i
l
_
c
o
p
i
e
s
_
t
o
_
s
i
t
e
_
a
d
m
i
n
s
'
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
s
e
n
d
A
d
m
i
n
E
m
a
i
l
(
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
s
-
>
p
a
r
s
e
d
_
e
m
a
i
l
[
'
s
u
b
j
e
c
t
'
]
,
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
s
-
>
p
a
r
s
e
d
_
e
m
a
i
l
[
'
t
e
x
t
'
]
)
;

	
	
	
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
s
-
>
p
a
r
s
e
d
_
e
m
a
i
l
[
'
t
e
x
t
'
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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

