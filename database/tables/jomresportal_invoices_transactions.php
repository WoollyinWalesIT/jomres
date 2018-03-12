
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
7
 
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


$
q
u
e
r
y
 
=
 
"

C
R
E
A
T
E
 
T
A
B
L
E
 
I
F
 
N
O
T
 
E
X
I
S
T
S
 
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
_
t
r
a
n
s
a
c
t
i
o
n
s
`
 
(

	
`
i
d
`
 
I
N
T
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
A
U
T
O
_
I
N
C
R
E
M
E
N
T
,

	
`
i
n
v
o
i
c
e
_
i
d
`
 
I
N
T
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
t
r
a
n
s
a
c
t
i
o
n
_
i
d
`
 
I
N
T
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
t
i
m
e
_
a
d
d
e
d
`
 
D
A
T
E
T
I
M
E
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
,

	
`
g
a
t
e
w
a
y
_
i
d
`
 
V
A
R
C
H
A
R
(
2
5
5
)
,

	
`
p
a
y
m
e
n
t
_
r
e
s
u
l
t
`
 
T
E
X
T
,

	
`
p
a
y
m
e
n
t
_
c
u
r
r
e
n
c
y
`
 
C
H
A
R
(
3
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
'
G
B
P
'
,

	
`
p
a
y
m
e
n
t
_
a
m
o
u
n
t
`
 
D
O
U
B
L
E
(
1
1
,
 
2
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
p
a
y
m
e
n
t
_
f
e
e
s
`
 
D
O
U
B
L
E
(
1
1
,
 
2
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
p
a
y
m
e
n
t
_
r
e
f
`
 
V
A
R
C
H
A
R
(
2
5
5
)
,

	
`
n
o
t
e
s
`
 
T
E
X
T
,

	
P
R
I
M
A
R
Y
 
K
E
Y
 
(
`
i
d
`
)
,

	
I
N
D
E
X
 
`
i
n
v
o
i
c
e
_
i
d
`
 
(
`
i
n
v
o
i
c
e
_
i
d
`
)

	
)

	
E
N
G
I
N
E
 
=
 
I
n
n
o
D
B
 

	
D
E
F
A
U
L
T
 
C
H
A
R
S
E
T
 
=
 
u
t
f
8
m
b
4
 

	
C
O
L
L
A
T
E
 
=
 
u
t
f
8
m
b
4
_
u
n
i
c
o
d
e
_
c
i
;

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
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
c
r
e
a
t
e
 
t
h
e
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
_
t
r
a
n
s
a
c
t
i
o
n
s
 
t
a
b
l
e
'
,
 
'
d
a
n
g
e
r
'
)
;

}

