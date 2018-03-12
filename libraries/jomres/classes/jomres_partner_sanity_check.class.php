
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
a
r
t
n
e
r
_
s
a
n
i
t
y
_
c
h
e
c
k

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
a
u
t
o
r
u
n
 
=
 
t
r
u
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
n
o
_
h
t
m
l
'
)
 
=
=
 
1
 
|
|
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
p
o
p
u
p
'
)
 
=
=
 
1
 
|
|
 
A
J
A
X
C
A
L
L
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

	
	
$
t
h
i
s
-
>
w
a
r
n
i
n
g
s
 
=
 
'
'
;

 
 
 
 
}


 
 
 
 
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
o
_
s
a
n
i
t
y
_
c
h
e
c
k
s
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
w
a
r
n
i
n
g
s
 
=
 
$
t
h
i
s
-
>
c
h
e
c
k
_
d
e
t
a
i
l
s
_
c
o
m
p
l
e
t
e
d
(
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
h
i
s
-
>
w
a
r
n
i
n
g
s
;

 
 
 
 
}


 
 
 
 
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
 
c
o
n
s
t
r
u
c
t
_
w
a
r
n
i
n
g
(
$
m
e
s
s
a
g
e
_
a
r
r
a
y
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
$
m
e
s
s
a
g
e
_
a
r
r
a
y
[
'
M
E
S
S
A
G
E
'
]
;

 
 
 
 
 
 
 
 
$
w
a
r
n
i
n
g
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
w
a
r
n
i
n
g
 
.
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
W
A
R
N
I
N
G
S
_
D
A
N
G
E
R
W
I
L
L
R
O
B
I
N
S
O
N
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
W
A
R
N
I
N
G
S
_
D
A
N
G
E
R
W
I
L
L
R
O
B
I
N
S
O
N
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
w
a
r
n
i
n
g
 
.
=
 
$
m
e
s
s
a
g
e
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
e
s
s
a
g
e
_
a
r
r
a
y
[
'
L
I
N
K
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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
u
t
p
u
t
 
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
u
t
p
u
t
[
'
L
I
N
K
'
]
 
=
 
$
m
e
s
s
a
g
e
_
a
r
r
a
y
[
'
L
I
N
K
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
B
U
T
T
O
N
_
T
E
X
T
'
]
 
=
 
$
m
e
s
s
a
g
e
_
a
r
r
a
y
[
'
B
U
T
T
O
N
_
T
E
X
T
'
]
;


 
 
 
 
 
 
 
 
 
 
 
 
$
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
[
 
]
 
=
 
$
o
u
t
p
u
t
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
a
g
e
o
u
t
p
u
t
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
B
A
C
K
E
N
D
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
s
a
n
i
t
y
_
c
h
e
c
k
s
_
b
u
t
t
o
n
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
a
r
n
i
n
g
 
.
=
 
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


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
<
p
>
'
.
$
w
a
r
n
i
n
g
.
'
<
/
p
>
'
;

 
 
 
 
}


 
 
 
 
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
 
c
h
e
c
k
_
d
e
t
a
i
l
s
_
c
o
m
p
l
e
t
e
d
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
t
a
s
k
'
)
 
!
=
 
'
e
d
i
t
_
m
y
_
a
c
c
o
u
n
t
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
p
a
r
t
n
e
r
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
p
a
r
t
n
e
r
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
t
a
i
l
s
_
c
o
m
p
l
e
t
e
 
=
 
$
p
a
r
t
n
e
r
s
-
>
c
h
e
c
k
_
p
a
r
t
n
e
r
_
d
e
t
a
i
l
s
_
c
o
m
p
l
e
t
e
(
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
-
>
i
d
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
d
e
t
a
i
l
s
_
c
o
m
p
l
e
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
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
P
A
R
T
N
E
R
S
_
P
L
E
A
S
E
_
C
O
M
P
L
E
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
A
R
T
N
E
R
S
_
P
L
E
A
S
E
_
C
O
M
P
L
E
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
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
e
d
i
t
_
m
y
_
a
c
c
o
u
n
t
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
t
t
o
n
_
t
e
x
t
 
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
M
Y
_
A
C
C
O
U
N
T
_
E
D
I
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
M
Y
_
A
C
C
O
U
N
T
_
E
D
I
T
'
,
 
f
a
l
s
e
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
h
i
s
-
>
c
o
n
s
t
r
u
c
t
_
w
a
r
n
i
n
g
(
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
$
m
e
s
s
a
g
e
,
 
'
L
I
N
K
'
 
=
>
 
$
l
i
n
k
,
 
'
B
U
T
T
O
N
_
T
E
X
T
'
 
=
>
 
$
b
u
t
t
o
n
_
t
e
x
t
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

